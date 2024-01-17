# A medicine information website developed using PHP and PostgreSQL
### How to use the project

#### clone this repository
`git clone https://github.com/MidhunManu/PHP-medicine-website`

#### start your PHP server
`php -S localhost:8000`

### Requirements
- php (I used PHP 8.1.2)
- PostgreSQL
- git

### scheme for table
                                          Table "public.medicines"
     Column     |          Type          | Collation | Nullable |                  Default                  
----------------+------------------------+-----------+----------+-------------------------------------------
 med_id         | integer                |           | not null | nextval('medicines_med_id_seq'::regclass)
 medicine_name  | character varying(100) |           | not null | 
 medicine_desc  | text                   |           | not null | 
 medicine_price | integer                |           | not null | 
 medicine_type  | character varying(20)  |           |          | 
Indexes:
    "medicines_pkey" PRIMARY KEY, btree (med_id)


