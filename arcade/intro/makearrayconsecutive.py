def makeArrayConsecutive2(statues):
    min = statues[0]
    max = statues[0]

    for i in range(0, len(statues)):
        if (statues[i] < min):
            min = statues[i]
        if (statues[i] > max):
            max = statues[i]

    need = max - min + 1 - len(statues)

    return need;



statues = [6, 2, 3, 8]
print(makeArrayConsecutive2(statues))