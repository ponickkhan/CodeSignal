def firstDuplicate(a):
    temp = set()
    for i in a:
        if i in temp:
            return i
        else:
            temp.add(i)

    return -1


a = [2, 1, 3, 5, 3, 2]
#a = [2, 4, 3, 5, 1]

print(firstDuplicate(a))