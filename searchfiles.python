# -*- coding utf-8 -*-
import os
import sys

def walkFiles(root, string):
    for dirpath, dirsname, files in os.walk(root, topdown=True, onerror=None, followlinks=False):
        for afile in files:
            try:
                apath = os.path.join(dirpath,afile)
                flag = 0
                count = 0
                fopen = open(apath,"r")
                for line in fopen.readlines():
                    count +=1
                    if(string in line):
                        flag = 1
                        if(count == 1):
                            print string + " in file " + apath + " line: " + str(count)
                if flag ==0:
                    pass
                    #print "-*- 404 -*-" + apath
            except:
                print "file: " + apath + " can not be read!"
            finally:
                if fopen:
                    fopen.close()

def main():
    root = raw_input("please input the root you want search: ")
    string = raw_input("please input the string you want search: ")
    print "+++++++++++++++++++++++++++++++++++++++++++++++++++++++"
    walkFiles(root,string)
    print "Done!"

if __name__=="__main__":
    main()
