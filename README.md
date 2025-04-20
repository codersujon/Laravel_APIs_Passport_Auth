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
- **Success Response:**
```json
{
  "status": true,
  "message": "Login successful!",
  "access_token": "BearerTokenHere"
}
```