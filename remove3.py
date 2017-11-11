fo = open('file_names', 'r')
files = fo.readlines()

for f in files:
    fp = open(f.strip(), 'r')

    line = fp.readlines()

    fp.close()

    for i in range(0, len(line)):
        start = line[i].find('preconnect')
        if( start != -1):
            print(i+1)
            line[i] = ""

        end = line[i].find('rel="preload"')
        if( end != -1):
            print(i+1)
            line[i] = ""

        start = line[i].find('shortcut icon')
        if( start != -1):
            print(f.strip())
            print(i+1)
            line[i] = '<link rel="shortcut icon" href="files/favicon.ico" type="image/x-icon">\n'

        end = line[i].find('apple-touch-icon')
        if( end != -1):
            print(i+1)
            line[i] = ""

    fp = open(f.strip(), 'w')
    for i in range(0, len(line)):
        fp.write(line[i])
    fp.close()

fo.close()