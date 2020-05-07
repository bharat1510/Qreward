from tensorflow.keras.models import load_model
#from collections import deque
import numpy as np
import pickle
import cv2
from flask import Flask, request,render_template,redirect
from werkzeug import secure_filename
import os

app = Flask(__name__)

model_path = "model/activity.model"
label_bin = "model/lb.pickle"
uploads_dir = "upload"
output_dir = "output"
size = 1
#username = ''

@app.route("/") 
def index():
	username = request.args.get('username')
	print(username)
	return render_template('index.html',data=username)
		
@app.route('/uploader', methods = ['POST'])
def uploader():
	if request.method == 'POST':
		username = request.form['username']
		activity_no = int(request.form['num'])
		input = request.files['file']
		input.save(os.path.join(uploads_dir, secure_filename(input.filename)))
		outputv = (os.path.join(output_dir, secure_filename(input.filename)))
		input = (os.path.join(uploads_dir, secure_filename(input.filename)))
		print(activity_no)
		print(username)
		print(input)
		print(outputv)
		#input = "up/handwash.mp4"
		out = outputv+".avi"
		# load the trained model and label binarizer from disk
		print("[INFO] loading model and label binarizer...")
		model = load_model(model_path)
		lb = pickle.loads(open(label_bin, "rb").read())

		# initialize the image mean for mean subtraction along with the
		# predictions queue
		mean = np.array([123.68, 116.779, 103.939][::1], dtype="float32")
		Q = deque(maxlen=size)

		# initialize the video stream, pointer to output video file, and
		# frame dimensions
		print("Start here")
		vs = cv2.VideoCapture(input)
		writer = None
		(W, H) = (None, None)
		print("End here")
		act_labels = []
		# loop over frames from the video file stream
		while True:
			# read the next frame from the file
			(grabbed, frame) = vs.read()

			# if the frame was not grabbed, then we have reached the end
			# of the stream
			if not grabbed:
				break

			# if the frame dimensions are empty, grab them
			if W is None or H is None:
				(H, W) = frame.shape[:2]

			# clone the output frame, then convert it from BGR to RGB
			# ordering, resize the frame to a fixed 224x224, and then
			# perform mean subtraction
			output = frame.copy()
			frame = cv2.cvtColor(frame, cv2.COLOR_BGR2RGB)
			frame = cv2.resize(frame, (224, 224)).astype("float32")
			frame -= mean

			# make predictions on the frame and then update the predictions
			# queue
			preds = model.predict(np.expand_dims(frame, axis=0))[0]
			Q.append(preds)

			# perform prediction averaging over the current history of
			# previous predictions
			results = np.array(Q).mean(axis=0)
			i = np.argmax(results)
			label = lb.classes_[i]
			
			act_labels.append(label)
			print('Acttivity :',label)
			
		ca_count,ch_count,ha_count,pu_count,si_count,sw_count,we_count,wei_count=0,0,0,0,0,0,0,0
		for i in act_labels:
			if i == 'Cards':
				ca_count+=1
			elif i == 'Chess':
				ch_count+=1
			elif i == 'Hand_wash':
				ha_count+=1
			elif i == 'Push_ups':
				pu_count+=1
			elif i == 'Singing':
				si_count+=1
			elif i == 'Swimming':
				sw_count+=1
			elif i == 'Wearing_mask':
				we_count+=1
			else: # i == 'Weight_lifting':
				wei_count+=1
		#print(ca_count,ch_count,ha_count,pu_count,si_count,sw_count,we_count,wei_count)
		#max_list = [ca_count,ch_count,ha_count,pu_count,si_count,sw_count,we_count,wei_count]
		max_list = [we_count,ha_count,ca_count,ch_count,pu_count,si_count,wei_count,sw_count]
		max_value = ca_count
		max_value_index = 0
		for index,mv in enumerate(max_list,1):
			if(max_value < mv):
				max_value = mv
				max_value_index = index
				
		print(max_value_index,max_value)	
		print(activity_no)
		#prediction = max(max_list)
		# release the file pointers
		print("[INFO] cleaning up...")
		#writer.release()
		vs.release()
		T = 'true'
		F = 'false'
		if(activity_no==max_value_index):
			return render_template('blank.html',usr=username,sent=T)
			#return redirect('https://bharatvora814.blogspot.com/'.format(ch_count))
		else:
			print("Else condition: ",activity_no,max_value_index)
			return render_template('blank.html',usr=username,sent=F)
if __name__ == '__main__':
	app.run(debug=True)