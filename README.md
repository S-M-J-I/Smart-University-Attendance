# Smart-University Online Attendance System

*This project was submitted as an evaluation metric for the course Microprocessor, Microcontroller and Interfacing Laboratory in United Internation University.*

See the hardware version that is linked to this version [here](https://github.com/S-M-J-I/Smart-University) 

## Problem Statement & Solution

Universities have many "background" processes that are done physically such as turning of room lights, attendance systems, and so on. Thus, we made a multidisciplinary electronics system that would automate these "background" tasks and save time and resources.

## Features

Our system provides:
- Automated online attendance system through biometric (fingerprint) validation.
- Automatic toggling of room lights
- Automated roof-top system for monsoon.
- Automated plant-watering system for the university's green environment.
- Electricity generation on pressure (and storage).

## Components Used

- Arduino Uno (x2)
- Node MCU Wifi Module
- Fingerprint sensor
- Microservo motor
- IR Sensor (x2)
- Piezo Elecric Sensor
- Submersible motor

## Process

This repository holds the online automated attendance system.
- The student would first place his finger on the fingerprint scanner
- This software would then communicate with the WiFi-module in the [hardware system](https://github.com/S-M-J-I/Smart-University/tree/master/fingerprint)
- If the student exsists in the system, attendance for that day and course is taken.

<hr>


***This project was made by [S M Jishanul Islam](https://github.com/S-M-J-I/), [Hridoy Das](https://github.com/hridoy1000), [Nur Islam Shourav](https://github.com/NI-Shourav), and [Sahid Hossain Mustakim](https://github.com/sratul35). This project is not accepting outside contributions.***
