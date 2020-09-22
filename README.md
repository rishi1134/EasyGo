# EasyGo
Smart Parking Assistance System

Parking on roads are one of the major problems in today’s era due to
population. EasyGo will solve this major problem. This project will tell the user about the
empty slots available for parking before reaching to their destination and
hence, can easily park their vehicles to their respective allotted slots. This
project will use computer vision with deep learning for real time application.
For slots generation through camera, image processing and computer vison is
used. The allotted slot information will be sent by admin on the cloud server
where user can book the empty parking slots for booking.

The system is implemented with the help of Python3.6.x with MobileNetSSD
and YOLOv2 deep learning models and HTML,CSS & PHP is used for UI

The project is tested on Windows10 and RaspberryPi 3b+ <br />
The "user" scripts should be copied to your wamp64/www directory.

# Approach
• [ADMIN]Part 1: First the camera will detect the empty parking slots / we can also
manually allocate the slots and stored their coordinated in file. If we are
doing manually then, marking and storing coordinates of parking is one
time process as all the coordinates will be stored in file.<br />
• Part 2: Stored coordinates will be used to determine if the object/vehicle
lies inside the marked coordinates ,then that particular slots cannot be
used for parking. Detection of vehicle will be done using different deep
learning models.<br />
• Part 3: Empty slots information can be send on the Cloud server where
user can get the information about empty slots available. <br />

# Flow Chart
![alt text](https://github.com/rishi1134/EasyGo/blob/master/output/flowDiagram.png?raw=true)

# Steps
1) [ADMIN] Create slots with makeSlots.py. The slots will be saved in slotCoords.txt. <br />
![alt text](https://github.com/rishi1134/EasyGo/blob/master/output/admin_drawSlots.png?raw=true)

2) [ADMIN] Run the main.py script on the hardware board for slot detection. <br />
![alt text](https://github.com/rishi1134/EasyGo/blob/master/output/detection.png?raw=true)

3) [USER] Website UI <br />
![alt text](https://github.com/rishi1134/EasyGo/blob/master/output/welcomeScreen.png?raw=true)
![alt text](https://github.com/rishi1134/EasyGo/blob/master/output/mapScreen2.png?raw=true)
![alt text](https://github.com/rishi1134/EasyGo/blob/master/output/bookingScreen.png?raw=true)
![alt text](https://github.com/rishi1134/EasyGo/blob/master/output/confirmScreen.png?raw=true)

