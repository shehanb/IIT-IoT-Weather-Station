# IIT-Iot-Weather-Station
Raspberry pi &amp; DHT11

There are two variants of the DHT11 you’re likely to come across. One is a four pin stand alone module, and the other is a three pin, PCB mounted module. The pinout is different for each one, so connect the DHT11 according to which one you have:

![alt tag](http://i0.wp.com/www.circuitbasics.com/wp-content/uploads/2015/12/DHT11-Pinout-for-three-pin-and-four-pin-types-2.jpg?zoom=1.5&resize=300%2C218)

Comparison of three pin DHT11 vs four pin DHT11

To output the temperature and humidity readings to an SSH terminal like PuTTY, connect the DHT11 to your Raspberry Pi like so:

![alt tag](http://i2.wp.com/www.circuitbasics.com/wp-content/uploads/2015/12/Raspberry-Pi-DHT11-SSH-Terminal-Output.png?resize=768%2C334)

Raspberry Pi DHT11 SSH Terminal Output Connection Diagram

Programming the DHT11 in Python

We will be using the Adafruit DHT11 Python library. We can download the library using Git, so if you don’t have Git installed on your Pi already, enter this at the command prompt:

sudo apt-get install git-core

Note: If you get an error installing Git, run sudo apt-get update and try it again.
To install the Adafruit DHT11 library:

1. Enter this at the command prompt to download the library:

     git clone https://github.com/adafruit/Adafruit_Python_DHT.git

2. Change directories with:

     cd Adafruit_Python_DHT

3. Enter this:

     sudo apt-get install build-essential python-dev

4. Install the library with:

     sudo python setup.py install
     
     
Referenced by http://www.circuitbasics.com/how-to-set-up-the-dht11-humidity-sensor-on-the-raspberry-pi/
