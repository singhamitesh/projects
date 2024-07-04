- I have taken this demo project and works on it to execute Docker commands in it. 
- I have buid the image this then containerize it ti run.
- I this I have executed all the docker comamnds such as -
   docker build .
   docker run <image-id/imagename:tag>
   docker networking commands to get container communiucate
   docker push <reponame:tagid>
   docker volume commands (-v)
   docker mount bind
   docker compose etc.
   used many of the docker commands and also WRITTEN THE DOCKER FILE  and COMPOSE FILE FOR THE SAME.

TO SHARE IT ON DOCKER HUB as a CONTAINER so, the any in globe can access it I have done following steps - 
1) docker build -t amiteshhsingh/dockerpracticewebapp:01 . (as I have make docker repo. with the name amiteshhsingh/dockerpracticewebapp)
2) docker run -d -P --name "webapp1" amiteshhsingh/dockerpracticewebapp:01    (to run the container and the project)
3) as I have created docker repo. on docker hub to I push this on docker repo.
4) docker login   (to login into docker in Integrated Terminal)
5) docker push amiteshhsingh/dockerpracticewebapp:01  (this will upload the my project Image on docker hub)
6) TO ACCES THIS IMAGE FORM MY DOCKER HUB REPOSITORIES YOU CAN ACCES IT BY -  docker pull amiteshhsingh/dockerpracticewebapp:01
7) After access it you can run the image and checkout/test the project which is webapp.


Also to run this app in simple way you have to download this whole folder unzip it -
1) go in webapp directory - cd webapp 
2) then give command - npm start
