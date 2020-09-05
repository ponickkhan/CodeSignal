def adjacentElementsProduct(inputArray):
    lst = []
    for i in range(0, len(inputArray) - 1):
        #print(inputArray[i] * inputArray[i + 1])
        lst.append(inputArray[i] * inputArray[i + 1])
    return max(lst)



inputArray = [3, 6, -2, -5, 7, 3]

print(adjacentElementsProduct(inputArray))
