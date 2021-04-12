import numpy as np

for i in range(0, 361, 15):
    print ("sin" + str(i) + " = " + str(np.math.sin(i)))
    print ("cos" + str(i) + " = " + str(np.math.cos(i)))
    print ("tan" + str(i) + " = " + str(np.math.tan(i)) + "\n")