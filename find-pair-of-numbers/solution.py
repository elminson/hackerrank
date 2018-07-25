# Input: A list / array with integers.  For example:
# [3, 4, 1, 2, 9]
# Returns:
#  Nothing. However, this function will print out
#  a pair of numbers that adds up to 10. For example,
#  1, 9.  If no such pair is found, it should print
#  "There is no pair that adds up to 10.".
def pair10(given_list):
    a = []
    a.append(given_list[0])
    found = 0
    for i in given_list:
        number = 10-i
        if number in a:
            print(number,",", i)
            found = 1
            break #remove this line if you want to print all pairs found
        else:
            a.append(i)
        
    if(found==0):
        print("There is no pair that adds up to 10.")

#run solution
print("""
Which pair adds up to 10? (Should print 1, 9)

[3, 4, 1, 2, 9]
""")

pair10([3, 4, 1, 2, 9])
