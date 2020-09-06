def firstNotRepeatingCharacter(my_string):
  chars = {}
  for i in my_string:
    if chars.get(i):
      chars[i] += 1
    else:
      chars[i] = 1
  for i in my_string:
    if chars[i] == 1:
      return i
  return "_"

s = "abacabad"
print(firstNotRepeatingCharacter(s))