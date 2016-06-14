#!/usr/bin/python3
import requests.packages.urllib3
import sys
import Adafruit_DHT
import requests

requests.packages.urllib3.disable_warnings()
while True:
    humidity, temperature = Adafruit_DHT.read_retry(11, 4)
    url = 'https://sv2.ideamarthosting.dialog.lk/devSupportApps/arduinoFiles/dht11.php'
    requests.get(url, params={'humidity': humidity,'temperature': temperature})
    print 'Temp: {0:0.1f} C  Humidity: {1:0.1f} %'.format(temperature, humidity)
