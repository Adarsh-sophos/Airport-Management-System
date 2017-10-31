fo = open('file_names', 'r')
files = fo.readlines()

for f in files:
    fp = open(f.strip(), 'r')

    line = fp.readlines()

    fp.close()

    for i in range(0, len(line)):
        start = line[i].find('<header')
        if( start != -1):
            print(f.strip())
            print(i+1)
            end = line[i].find('header>', start+2)
            line[i] = line[i][:start] + '\n<?php require("header.php"); ?>\n' + line[i][end+7:]
            break

    fp = open(f.strip(), 'w')
    for i in range(0, len(line)):
        fp.write(line[i])
    fp.close()

fo.close()