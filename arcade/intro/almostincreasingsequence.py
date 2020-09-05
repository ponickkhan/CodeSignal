def almostIncreasingSequence(sequence):
    removedIdx = []  # Indexes that need to be removed

    for idx, item in enumerate(sequence):
        tmp = []  # Indexes between current index and 0 that break the increasing order
        for i in range(idx - 1, -1, -1):
            if sequence[idx] <= sequence[i]:  # Add index to tmp if number breaks order
                tmp.append(i)
        if len(tmp) > 1:  # If more than one of the former numbers breaks order
            removedIdx.append(idx)  # Add current index to removedIdx
        else:
            if len(tmp) > 0:  # If only one of the former numbers breaks order
                removedIdx.append(tmp[0])  # Add it to removedIdx
    return len(set(removedIdx)) <= 1




sequence = [1, 3, 2, 1]
print(almostIncreasingSequence(sequence))
