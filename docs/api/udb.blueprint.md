FORMAT: 1A

# UDB Backend

# Group Users

## Users Collection [/users{?page,username,first_name,last_name}]

+ Parameters
    + page (optional, number) ... The number of the page of the collection
    
+ Model (application/hal+json)
    + Body
    
        ```
        {
            "total_count": 5000,
            "page_size": 25,

            "_embedded": {
                "users": [
                ]
            },
            
            "_links": {
                "self": {
                    "href": "/users"
                }
            }
        }
        ```

### Get all users [GET]

+ Parameters
    + username (optional, string) ... Filter by username (substring)
    + first_name (optional, string) ... Filter by first name (substring)
    + last_name (optional, string) ... Filter by last name (substring)

+ Response 200

    [Users Collection][]
    
    
## User [/users/{id}]

+ Parameters
    + id (integer) ... The user ID
    
+ Model (application/hal+json)
    + Body
    
        ```
        {
            "id" : 1001,
            "username" : "testuser",
            "first_name" : "Test",
            "last_name" : "User",
            "full_name" : "Ing. Test User",
            "email" : "test.user@example.com",
            "employee_type" : "engineer",
            "status" : "active",
            "photo_url" : "https://example.com/photo/id/1001",
            "work_phone" : [
                "+420-111-222-333"
            ],
            "room" : [
                "Praha 6, Neznama 4, B2-340"
            ],
            "email_forwarding" : [],
            "email_alternative" : [],
            "card_id" : [],
            "myfare_id" : [],
        
            "_links" : {
                "self" : {
                    "href" : "/users/1001"
                }
            }
        }
        ```

### Get a single user [GET]

+ Response 200

    [User][]


### Modify user's data [PATCH]

+ Request (application/json)
    + Body
    
        ```
        {
            "work_phone" : [
                "+420-111-222-333"
            ],
            "room" : [
                "Praha 6, Neznama 4, B2-340"
            ]
        }
        ```

+ Response 200

    [User][]
    
