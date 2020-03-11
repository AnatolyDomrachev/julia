
def summ(N):
    s = 0
    for i in range (N):
        if(i%3 == 0):
            s+=i
    return s
        
N = 1000
res = summ(N)
print(res)
