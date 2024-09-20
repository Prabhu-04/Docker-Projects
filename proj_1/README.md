This is a simple web application I build using chatgpt to practice my docker skills.

The dockerfile uses the nginx base image which by default runs on port 80.

Then I have copied the index.html and styles.css files I have created to the destination directory in nginx.

And finally I have exposed port 80.

Once the dockerfile and index.html,styles.css files are created run the below commands to create and run the containarized web application.

# docker build -t <image_name> <path to dockerfile>
# docker run -d -p <port_on_localhost>:80 <image_name>

Then access the web application with the IP of local host on the port we have specified.

#localhost:<port>

 
