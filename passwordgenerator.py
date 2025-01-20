import random
pwd = int(input ("ENTER NO. OF ELEMENTS OF PASSWORD"))

for i in range (pwd):
    special ="!$%&'()*+,-./"
    specialchar = random.choice (special)
    char = str(specialchar)
    
    list1 = "qwertyuioplkjhgfdsazxcvbnm"
    random_alphabetical = random.choice (list1)
    
    list2 = list1.upper()
    random_alphabetical2 = random.choice  (list2)
    
    random_number = random.randint(0,10)
    n=str(random_number)
    pwd = " ".join(n+random_alphabetical+random_alphabetical2+char)
print(pwd)
