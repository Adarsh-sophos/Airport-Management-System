file1 = input()

fp = open(file1, 'r')

line = fp.readlines()

fp.close()

for i in range(0, len(line)):
    start = line[i].find('<div id="WIX_ADS"')
    if( start != -1):
        print(i+1)
        end = line[i].find('<noscript', start+1)
        line[i] = line[i][:start] + line[i][end:]
        break
   
fp = open(file1, 'w')
for i in range(0, len(line)):
    fp.write(line[i])
fp.close()