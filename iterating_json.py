import json 
f = open('lecturers.json')
data = json.load(f)
for i in data['schools']:
    x= i['selection1']
   
    for j in x :
        print(j['name'])
