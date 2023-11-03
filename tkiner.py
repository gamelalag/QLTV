from tkinter import *
win = Tk()
#ten
win.title("Nguyễn Quang Hữu")
#kich thuoc
win.geometry('300x300')
#mau` sac
win['bg'] = 'white'
#chuong trinh luon hien len
win.attributes('-topmost',True)# code lam cho cua so luon tren top

name = Label(win,text = 'Tiêu đề ',font = ('Times New Roman',14),bg= 'red',fg = 'white')
name.place(x=30,y=30)#vi tri
#tao button
def nhapvao():
    name1 = Label(win,text = 'ban da click vao nut ',font = ('Times New Roman',14),bg= 'red',fg = 'white')
    name1.place(x=30,y=250)
but = Button(win, text = 'Click vao day',width=10,height=5, bg = 'yellow', font = ('Times New Roman',13),fg='red',command= nhapvao)
but.place(x = 50,y=50)



entry = Entry(win,width=20, font = ('Times New Roman',10))
entry.place(x=20,y=20)
entry.focus()
win.mainloop()