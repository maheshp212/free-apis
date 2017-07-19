# free-apis
please enjoy the free apis

# [View Demo ![APIs Demo](https://github.com/maheshp212/free-apis/blob/master/demo.png "APIs Demo")](http://api.qshore.com/)

# LIST USERS API
**API URL:**   /users

**METHOD:** GET

**RESPONSE:** see below
```
{"data":[{"id":"1","fname":"Mahesh","lname":"Perla","age":"23","email":"mahesh@gmail.com","password":"mahesh213"},{"id":"2","fname":"Ramesh","lname":"Reddy","age":"2","email":"ramehs@gmail.com","password":"ramehs143"},{"id":"3","fname":"Krishan","lname":"koundanyia","age":"20","email":"kkr@gmail.com","password":"kk3213"},{"id":"4","fname":"Umang","lname":"tripathi","age":"23","email":"tumang@gmail.com","password":"tumang3613"},{"id":"5","fname":"Mukesh","lname":"Ambani","age":"45","email":"amaniM@gmail.com","password":"amaniM213"},{"id":"6","fname":"Kailesh","lname":"yadav","age":"56","email":"kailash@gmail.com","password":"kailash@#"},{"id":"7","fname":"Girish","lname":"kulkarni","age":"92","email":"giriesh@gmail.com","password":"kulkarni098"},{"id":"8","fname":"amit","lname":"tripathi","age":"53","email":"amit@gmail.com","password":"amit12"},{"id":"9","fname":"sandep","lname":"boyina","age":"17","email":"boyinaS@gmail.com","password":"bbbs9643"},{"id":"10","fname":"lalit","lname":"kumar","age":"22","email":"lalit@gmail.com","password":"lalit45"}],"msg":"","status":true}
```

# VIEW USER API
**API URL:**   /view-user/1

**METHOD:** GET

**RESPONSE:** see below
```
{"data":{"id":"1","fname":"Mahesh","lname":"Perla","age":"23","email":"mahesh@gmail.com","password":"mahesh213"},"msg":"","status":true}
```


# ADD USER API
**API URL:**   /add-user

**METHOD:** POST

**DATA:**

```
fname: Mohan
lname:Lal
age:23
email:mohanlal@123
password:lal123
```
**RESPONSE:** see below
```
{"data":{"insert_id":22},"msg":"Data successfully inserted.","status":true}
```

# EDIT USER API
**API URL:**   /edit-user/1

**METHOD:** PUT

**DATA:**
```
fname: Mohan
lname:Lal
age:23
email:mohanlal@123
password:lal123
```
**RESPONSE:** see below
``` {"data":{"updated_id":"1"},"msg":"Data successfully updated.","status":true} ```

# DELETE USERS API
**API URL:**   /delete-user/11

**METHOD:** DELETE

**RESPONSE:** see below
``` {"data":{"deleted_id":"11"},"msg":"Data successfully deleted.","status":true}```


