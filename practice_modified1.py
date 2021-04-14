import numpy as np

for i in range(0, 361, 15):
    radangle = np.radians(i)
    print ("sin" + str(i) + "°= " + str(np.sin(radangle)))
    print ("cos" + str(i) + "°= " + str(np.cos(radangle)))
    if (i-90)%180==0:
        print ("tan" + str(i)+"°は存在しません"+"\n")
    else:
        print ("tan" + str(i) + "°= " + str(np.tan(radangle))+"\n")