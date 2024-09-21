FROM python:3.9-slim
#Defining the base image

WORKDIR /app
#Setting the working directory

RUN pip install Flask==2.3.2 
#installing dependency

COPY . .
#copying the application

ENV FLASK_APP=app.py
#defining the entry point of our application

EXPOSE 5000
#exposing the port in which our application will be accessible

CMD ["flask","run","--host=0.0.0.0"]
#defining the commands to run that starts our application

