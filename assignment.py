import math
variable1 = float(input("what's the radius of your circle "))
#this is where the formula and the variable make the area and circumference.
area = variable1**2 * math.pi
circumfrence = 2*math.pi*variable1
#These next 4 if statements are conditions of the number inputed if the radius entered is a positive float you will get circumference and area
if variable1 > 0:
    print(" The area of your circle is ", area , " and the circumfrence is ", circumfrence,".")
    #if a negative number is entered then you get message alerting your of your error
if variable1 < 0:
    print("Please enter a number that is POSITIVE")
        #if ZERO is entered then you get message alerting your of your error as zero is not vaild for area and circumference
if variable1 == 0:
    print("Please use a number other then ZERO")
    #if nothing is inputed then a message tells you to input a radius so the calculation can be done (NOT DONE) 
### Need to make a scenario for input = nothing and input = letters ###
