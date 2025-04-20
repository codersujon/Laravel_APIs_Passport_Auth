# 👨‍💼 Laravel REST APIs Development

The Authors and Books API Development with the help of Passport Authentication.

---

## 🌐 Base URL
http://localhost:8000/api/

---

## Tables: Authors & Books
- **Authors** `id, name, email, phone_no, password`  
- **Books** `id, author_id, title, description, book_cost`  


## 📚 API Endpoints

### 👤 1. Register Author

- **URL:** `/api/author/register`  
- **Method:** `POST`
- **Body (JSON):**

```json
{
  "name": "John Doe",
  "email": "john@example.com",
  "phone_no": "01700000000",
  "password": "securePassword123"
}
```

- **Success Response:**
```json
{
  "status": true,
  "message": "Author created successfully!",
}
```

### 📝 2. Login Author

- **URL:** `/api/author/login`  
- **Method:** `POST`
- **Body (JSON):**

```json
{
  "email": "john@example.com",
  "password": "securePassword123"
}
```
- **Response:**
```json
{
  "status": true,
  "message": "Login successful!",
  "access_token": "BearerTokenHere"
}
```

### 📝 3. View Profile (Protected)

- **URL:** `/api/author/profile`  
- **Method:** `GET`

- **Response:**
```json
{
  "status": true,
    "message": "Profile Data!",
    "data": {
        "id": 2,
        "name": "Rahim",
        "email": "rahim@gmail.com",
        "phone_no": "01680366446",
        "password": "$2y$12$bk1L3eBt4coVUTbxu6rW4eOfCKnyfDXcwu95znLCi.JH9Y4onMA.y"
    }
}
```

### 📝 4. Logout (Protected)

- **URL:** `/api/author/logout`  
- **Method:** `GET`

- **Response:**
```json
{
  "status": true,
  "message": "Author Logout!"
}
```

### 📘 5. Add Book

- **URL:** `/api/books/add-book`  
- **Method:** `POST`
- **Body (JSON):**

```json
{
   "title": "নফসের বিরুদ্ধে জিহাদ",
   "description": "A practical guide to Laravel development.",
   "book_cost": 150
}
```

- **Response:**
```json
{
 "status": true,
    "message": "Book Created Successfully!",
    "date": {
        "author_id": 1,
        "title": "নফসের বিরুদ্ধে জিহাদ",
        "description": "A practical guide to Laravel development.",
        "book_cost": "150",
        "id": 5
    }
}
```

### 📘 6. List All Books

- **URL:** ` /api/books/list-book`  
- **Method:** `GET`
- **Success Response**

```json
{
    "status": true,
    "message": "Books found",
    "data": [
        {
            "id": 1,
            "author_id": 1,
            "title": "নফসের বিরুদ্ধে লড়াই",
            "description": null,
            "book_cost": null
        },
        {
            "id": 5,
            "author_id": 1,
            "title": "জিহাদ",
            "description": "sample",
            "book_cost": 150
        }
    ]
}
```

### 📘 7. Delete Book

- **URL:** `/api/books/delete-book/{id}`  
- **Method:** `GET`
- **Success Response**

```json
{
  "status": true,
  "message": "Book deleted!"
}
```

### 🗂 Folder Structure Overview
```markdown
  app/
  └── Http/
      └── Controllers/
          └── Api/
              ├── AuthorController.php
              └── BookController.php
  routes/
  └── api.php
```

### ⚙️ Built With
- **Laravel 12+**
- **PHP 8.2+**
- **MySQL**
- **Postman (for testing)**

## 🌐 API Docs

🔗 [View Full API Documentation](http://localhost:8000/docs)

### 👨‍💻 Developed By

<p align="left">
  <a href="https://github.com/codersujon/" target="_blank">
    <img src="https://img.shields.io/badge/GitHub-100000?style=for-the-badge&logo=github&logoColor=white" alt="GitHub"/>
  </a>
  <a href="https://www.linkedin.com/in/codersujon/" target="_blank">
    <img src="https://img.shields.io/badge/LinkedIn-0077B5?style=for-the-badge&logo=linkedin&logoColor=white" alt="LinkedIn"/>
  </a>
  <a href="mailto:csesujon155@email.com" target="_blank">
    <img src="https://img.shields.io/badge/Email-D14836?style=for-the-badge&logo=gmail&logoColor=white" alt="Email"/>
  </a>
</p>

<p>
  Developed with ❤️ by <strong>MD SUJAN AHMED</strong>
</p>