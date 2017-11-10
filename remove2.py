fo = open('file_names', 'r')
files = fo.readlines()

for f in files:
    fp = open(f.strip(), 'r')

    line = fp.readlines()

    fp.close()

    for i in range(0, len(line)):
        start = line[i].find('<!-- DATA -->')
        if( start != -1):
            print(f.strip())
            print(i+1)
            starting_index = i

        end = line[i].find('<body')
        if( end != -1):
            print(i+1)
            ending_index = i
            break
    #print(ending_index)
    line.insert(ending_index, "      </head>")

    for i in range(starting_index, ending_index):
        line[i] = ""

    fp = open(f.strip(), 'w')
    for i in range(0, len(line)):
        fp.write(line[i])
    fp.close()

fo.close()