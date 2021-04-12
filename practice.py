import numpy as np

for i in range(0, 361, 15):
    print ("sin" + str(i) + "°= " + str(np.sin(np.radians(i))))
    print ("cos" + str(i) + "°= " + str(np.cos(np.radians(i))))
    if i == 90 or i == 270:
        print ("tan" + str(i)+"°は存在しません"+"\n")
    else:
        print ("tan" + str(i) + "°= " + str(np.tan(np.radians(i)))+"\n")