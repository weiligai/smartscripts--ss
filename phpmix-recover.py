#-*-coding:utf-8-*-
import sys
import re

#get the variable name
strname = sys.argv[1].split('=', 1)[0]
#get the variable strcontent, replace the '\' and delete single quotes
strcontent = re.sub(r'\\', '', sys.argv[1].split('=', 1)[1].strip('\''))

def replaceStr(matched):
    return strcontent[int(matched.group('dex'))]

def getRealWorld():
    pattern = '\\' + strname + '\\[(?P<dex>\\d+)\\]'
    result = re.sub(pattern, replaceStr, sys.argv[2])
    #delete dot
    resultnodot = re.sub(r'\.', '', result)
    return resultnodot

def main():
    print getRealWorld()

if __name__=="__main__":
    main()

