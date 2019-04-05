#!/usr/bin/env python
# -*- coding: utf-8 -*-
import pymysql
db = pymysql.connect("localhost","root","ZySxsusu0111","myhotel_up" )
cursor = db.cursor()
db1=pymysql.connect("localhost","root","ZySxsusu0111","myhotel" )
cursor1 = db1.cursor()
sql="SELECT * FROM hotel_info"
cursor.execute(sql)
results=cursor.fetchall()

for row in results:
    sql1=""'INSERT INTO hotel_up(H_ID,`Hotel Name`) VALUES ({},{})'"".format(row[0],'"'+row[1]+'"')
    cursor1.execute(sql1)
    db1.commit()
db.commit()

