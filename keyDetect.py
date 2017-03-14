import Tkinter as tk
import subprocess
import time


def execute_unix(inputcommand):
    p = subprocess.Popen(inputcommand, stdout=subprocess.PIPE, shell=True)
    (output, err) = p.communicate()
    return output

root = tk.Tk()

with open('/var/www/newfile1.txt') as f:
    content = f.readlines()
line = content[0]
contentArray = line.split(';')
list = contentArray

contentArray = line.split(',')
list2 = {}
key_list=[]
for i in contentArray:
	dummy_list = i.split(':')
	list2.update({dummy_list[0]:dummy_list[1]})
for k,v in list2.items():
	key_list.append(k)
def onKeyPress(event):
	if event.char in key_list:
		print (list2[event.char])
		c = 'espeak "%s" 2>/dev/null'% list2[event.char]
		execute_unix(c)
		time.sleep(2)
	else:
		print('enter a valid key')
root.geometry('300x200')
text = tk.Text(root, font=('Comic Sans MS', 40))
text.pack()
root.bind('<KeyRelease>', onKeyPress)
root.mainloop()
