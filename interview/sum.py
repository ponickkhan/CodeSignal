def sum(data, sum):
    # using complement
    complement = set()
    for i in range(0, (len(data))):
        if data[i] in complement:
            return True
        else:
            complement.add(data[i])
        print(data[i])
        print(complement)
    return False

    # Linear search on sorted data
    # low = 0
    # hi = len(data)-1
    # while (low<hi):
    #     s = data[low]+data[hi]
    #     if s==sum:
    #         return True
    #     low+=1
    # return False

    # binary search
    # for i in range(0,len(data)):
    #     for k in range(0,len(data)):
    #         if (data[i]+data[k]==sum):
    #            return (data[i],data[k])
    # return False


data = [1, 2, 3, 4, 6]
# data = [1,3,2,4,5,4]

print(sum(data, 8))
