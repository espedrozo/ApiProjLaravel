# Laravel API Project - Portfolio

This is a Laravel project that implements an API to manage customer and client data. The API provides endpoints for CRUD (Create, Read, Update, Delete) operations on two main entities: `Customer` and `Client`.


## Key Features

- **Customers (Database 1):** Operations to manage customer information such as name, gender, birth date, and status.

- **Clients (Database 2):** Management of potential clients with similar operations to customers.

- **Database Synchronization:** Functionality to synchronize data between different databases.


## API Routes

### Customers

- `GET /api/customers`: Get all customers.
- `GET /api/customers/{id}`: Get a specific customer by ID.
- `POST /api/customers`: Create a new customer.
- `PUT /api/customers/{id}`: Update information for an existing customer.
- `DELETE /api/customers/{id}`: Delete a customer.


### Clients

- `GET /api/clients`: Get all potential clients.
- `GET /api/clients/{id}`: Get a specific potential client by ID.
- `POST /api/clients`: Create a new potential client.
- `PUT /api/clients/{id}`: Update information for an existing potential client.
- `DELETE /api/clients/{id}`: Delete a potential client.


### Database Synchronization

- `GET /api/syncDatabases`: Synchronize data between Database 1 and Database 2.


## How to Use

1. Clone this repository.
2. Set up your Laravel environment (copy `.env.example` to `.env` and configure the database).
3. Run database migrations: `php artisan migrate`.
4. Start the server: `php artisan serve`.
5. Access the API at `http://localhost:8000/api`.


## Technologies Used

- Laravel
- MySQL (or another database of your choice)
- Axios (for asynchronous HTTP requests on the frontend)
- HTML, CSS (for the user interface)
- JavaScript (to handle frontend events)


This is a project for personal portfolio.

---

**Author:** Emanuel Savanhago Pedrozo
