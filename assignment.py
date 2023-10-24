import math
try:
    variable1 = float(input("what's the radius of your circle: "))
    area = variable1**2 * math.pi
    circumfrence = 2*math.pi*variable1
except ValueError :
    print("YOUR INPUT IS NOT VALID ")

else:
    if variable1 < 0:
        print("Please enter a number that is POSITIVE")
    if variable1 == 0:
        print("Please use a number other then ZERO")
    if variable1 > 0:
        print(f"Your circumferemce is {circumfrence} and your area is {area}.")
