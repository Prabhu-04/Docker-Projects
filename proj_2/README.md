#This is another project that I built to practise by docker skills, In which I containerize a basic flask app.

So I have created the app.py file using chatGPT ofcourse! that contains the code for our flask application.

Next comes our Dockerfile:

1. We are using a python base image.
2. Then we set the working directory to /app.
3. Then the only requirement for our application to run is flask so we are installing it using RUN.
4. We next copy our application code to our image.
5. Then comes the FLASK_APP environment variable, we need to let docker know the entry point for the application which is app.py in our case.
6. We have exposed the port 5000 (which is the default port for a python flask applications).
7. Then finally we have defined the commmands that should be run to start our application using CMD

As our Dockerfile is now ready, we can build our image and run our container:

docker build -t simple_flask_app .
docker run -d -p 5000:5000 simple_flask_app

Once our container is up and running, it should be accessible at the localhost:5000.

