import MySQLdb
import matplotlib.pyplot as plt
#row=[1,2,2,3,6,5,4,5,5,5]
#bin_edges=[0,1,2,3,4,5]
#plt.hist(row,bins=bin_edges)
#plt.show()

conn = MySQLdb.connect(host="localhost", user="root", passwd="", db="registration")
cursor = conn.cursor()
cursor.execute('select rating from feedbacknew');
rows = list(cursor.fetchall())
#print(rows)
l=[]
for i in rows:
	l.append(list(i))
l1=[]
for i in range(len(rows)):
	l1.append(int(l[i][0]))
#print(l1)

bin_edges=[0,1,2,3,4,5]
plt.hist(l1,bins=bin_edges)
plt.xlabel('Ratings')
plt.ylabel('Number of Ratings')

plt.show()