JOBBOX.io API
=============

This is a description of the HTTP API made available by JOBBOX.io (http://jobbox.io)


Authentication
==============

All requests need authentication. Authentication is done by sending an "Authorization" header with the following format:

    Authorization: Token token=<API token>

where &lt;API token> should be replaced by the user's API token. Example of a request (using cURL) to get the list of Companies:

    curl -H "Authorization: Token token=138e076dce8a2" http://jobbox-stg.herokuapp.com/api/v1/companies.json


Pagination
==========

The endpoints that return a list of items are paginated. The following query
string parameters can be use to control and navigate between pages:

- **offset**: the index of first item to be retrieved for the current page. The default is zero (the first item).
- **limit**: the amount of items to return in the current page. The default is 50 items. 50 is also the maximum number of items per page.

The following example retrieves 10 companies starting at index 30:

    curl -H "Authorization: Token token=138e076dce8a2" http://jobbox-stg.herokuapp.com/api/v1/companies.json?limit=10&offset=30


Endpoints
=========

Here's the list of available endpoints - currently only JSON representation is supported.


Companies
---------

### List of companies
Returns the list of companies.

URL: `http://jobbox.io/api/v1/companies`

Example response:
```JSON
[
    {
        "id": 1,
        "name": "Hackett, Treutel and Hartmann",
        "description": "facilitate sexy supply-chains",
        "logo_url": "https://example1.jpg",
        "website_url": "http://cristnienow.info/alyon",
        "created_at": "2015-02-12T19:01:34.529Z",
        "updated_at": "2015-02-12T19:01:34.529Z"
    },
    {
        "id": 2,
        "name": "Huels, Walsh and Lakin",
        "description": "unleash compelling systems",
        "logo_url": "https://example2.jpg",
        "website_url": "http://prohaskajast.name/benton",
        "created_at": "2015-02-12T19:01:36.726Z",
        "updated_at": "2015-02-12T19:01:36.726Z"
    },
    {
        "id": 3,
        "name": "Walker Group",
        "description": "optimize sexy architectures",
        "logo_url": "https://example3.jpg",
        "website_url": "http://runolfonoconner.biz/marcos_mckenzie",
        "created_at": "2015-02-12T19:01:38.207Z",
        "updated_at": "2015-02-12T19:01:38.207Z"
    }
]
```


### Company
Returns the company with the given id.

URL: `http://jobbox.io/api/v1/companies/[id]`

Example response:
```JSON
{
    "id": 1,
    "name": "Hackett, Treutel and Hartmann",
    "description": "facilitate sexy supply-chains",
    "logo_url": "https://example.jpg",
    "website_url": "http://cristnienow.info/alyon",
    "created_at": "2015-02-12T19:01:34.529Z",
    "updated_at": "2015-02-12T19:01:34.529Z"
}
```

Job offers
----------

### List of job offers
Returns the list of job offers.

URL: `http://jobbox.io/api/v1/offers`

Example response:
```JSON
[
    {
        "id": 1,
        "city": "East Terry",
        "company_id": 1,
        "country_code": "ML",
        "country_name": "Mali",
        "currency_code": "EUR",
        "expires_at": "2015-05-21",
        "nice_to_have": "Esse veniam vitae. Dolore ipsa sed quam modi quis quidem qui. Culpa facilis illum non. Doloribus est eum sit.",
        "perks": "Officiis aut fugiat temporibus consequatur perspiciatis sint cumque. Natus veritatis ullam rem nihil voluptas. Assumenda pariatur ullam temporibus. Est ut nisi qui voluptates ab provident. In eligendi praesentium ipsa asperiores similique nisi.",
        "published_at": "2015-02-09T18:34:30.270Z",
        "reward": 500,
        "remote": false,
        "relocation_paid": false,
        "role_description": "---\n- Autem nemo quia recusandae harum consequatur eos. Recusandae iure quia modi qui.\n  Repellendus voluptatem dicta illum voluptas impedit deleniti. Enim ipsa ducimus\n  itaque incidunt voluptatem cum. Molestiae saepe nemo qui dolor.\n- Fugit inventore quia. Laboriosam quam ut sint veritatis ut. Similique debitis tempore\n  nulla modi quisquam quae. Vel omnis numquam impedit voluptate dolorem laborum necessitatibus.\n- Numquam reiciendis et id vitae. Molestiae placeat rerum iure. Illum sunt est vel\n  eum. Consequatur sint ut qui voluptas quisquam reiciendis quibusdam.\n",
        "salary_low": null,
        "salary_high": null,
        "successful?": false,
        "title": "Regional Creative Specialist",
        "work_from_home": false,
        "created_at": "2015-02-09T18:34:30.270Z",
        "updated_at": "2015-02-12T19:01:56.042Z",
        "type": "Contract",
        "tags": [
            "Arduino",
            "Oberon"
        ]
    },
    {
        "id": 2,
        "city": "Port Timothyland",
        "company_id": 1,
        "country_code": "ML",
        "country_name": "Mali",
        "currency_code": "EUR",
        "expires_at": "2015-02-11",
        "nice_to_have": "Amet nemo quia temporibus officiis vero et. Accusamus eum itaque vel facere. Totam neque distinctio recusandae qui. Nulla fuga fugiat quis praesentium temporibus.",
        "perks": "Quibusdam adipisci aspernatur aut amet dignissimos nihil asperiores. Aut vel repudiandae. Provident dolore sed ullam. Non corporis fugiat voluptatem sunt ex ea. Et aut quaerat porro maxime voluptatem odit.",
        "published_at": "2015-02-11T13:17:01.621Z",
        "reward": 900,
        "remote": false,
        "relocation_paid": false,
        "role_description": "---\n- Neque nobis ut enim porro autem. Voluptatem nulla et quia. Tenetur enim fugiat quo\n  praesentium eos amet aliquam. Sit facilis tempore quidem quas explicabo ipsam sed.\n  Ab voluptas id illum molestiae.\n- A assumenda nisi doloribus ab. Dolorum omnis qui modi possimus quod saepe rerum.\n  Animi et ea consequatur.\n- Ut corrupti unde qui. Quia a eius veniam occaecati eum libero dicta. Qui et laudantium.\n  Animi blanditiis et facilis dolores consequatur impedit consequuntur.\n",
        "salary_low": null,
        "salary_high": null,
        "successful?": false,
        "title": "Dynamic Infrastructure Liason",
        "work_from_home": false,
        "created_at": "2015-02-11T13:17:01.621Z",
        "updated_at": "2015-02-12T19:01:56.042Z",
        "type": "Part-time",
        "tags": [
            "Lisp",
            "LPC",
            "xBase"
        ]
    },
    {
        "id": 3,
        "city": "Botsfordborough",
        "company_id": 1,
        "country_code": "ML",
        "country_name": "Mali",
        "currency_code": "EUR",
        "expires_at": "2015-04-01",
        "nice_to_have": "Excepturi ratione debitis nulla. Quia aut occaecati repellendus voluptas dolorem animi placeat. Rerum et consequatur dolores cum soluta est molestias. Non nihil nostrum ut pariatur.",
        "perks": "Blanditiis vel ea suscipit et quae. Eveniet magnam pariatur ullam rem ut. Aliquid qui quo voluptatum culpa. Aut eos labore. Et omnis autem assumenda ipsam repudiandae dolor.",
        "published_at": "2015-02-11T00:28:01.683Z",
        "reward": 600,
        "remote": false,
        "relocation_paid": false,
        "role_description": "---\n- A aut itaque magni ut. Voluptas quos qui ullam mollitia animi nam. Et qui voluptatibus.\n  Rem dolor numquam veniam impedit tempore.\n- Iusto eius ut. Fugit et non. Cum vero mollitia placeat quae quia. Aut dignissimos\n  aspernatur. Tempora recusandae aut voluptatem voluptatem.\n- Odio eius est. Ea harum quia nam occaecati alias quia cumque. Nemo in quia eos aliquid\n  quos quisquam quo. Corporis a eveniet ab enim.\n",
        "salary_low": null,
        "salary_high": null,
        "successful?": false,
        "title": "Corporate Infrastructure Liason",
        "work_from_home": false,
        "created_at": "2015-02-11T00:28:01.683Z",
        "updated_at": "2015-02-12T19:01:56.042Z",
        "type": "Freelance",
        "tags": [
            "Go",
            "JScript",
            "Slate"
        ]
    }
]
```


### Job offers
Returns the job offer with the given id.

URL: `http://jobbox.io/api/v1/offers/[id]`

Example response:
```JSON
{
    "id": 1,
    "city": "East Terry",
    "company_id": 1,
    "country_code": "ML",
    "country_name": "Mali",
    "currency_code": "EUR",
    "expires_at": "2015-05-21",
    "nice_to_have": "Esse veniam vitae. Dolore ipsa sed quam modi quis quidem qui. Culpa facilis illum non. Doloribus est eum sit.",
    "perks": "Officiis aut fugiat temporibus consequatur perspiciatis sint cumque. Natus veritatis ullam rem nihil voluptas. Assumenda pariatur ullam temporibus. Est ut nisi qui voluptates ab provident. In eligendi praesentium ipsa asperiores similique nisi.",
    "published_at": "2015-02-09T18:34:30.270Z",
    "reward": 500,
    "remote": false,
    "relocation_paid": false,
    "role_description": "---\n- Autem nemo quia recusandae harum consequatur eos. Recusandae iure quia modi qui.\n  Repellendus voluptatem dicta illum voluptas impedit deleniti. Enim ipsa ducimus\n  itaque incidunt voluptatem cum. Molestiae saepe nemo qui dolor.\n- Fugit inventore quia. Laboriosam quam ut sint veritatis ut. Similique debitis tempore\n  nulla modi quisquam quae. Vel omnis numquam impedit voluptate dolorem laborum necessitatibus.\n- Numquam reiciendis et id vitae. Molestiae placeat rerum iure. Illum sunt est vel\n  eum. Consequatur sint ut qui voluptas quisquam reiciendis quibusdam.\n",
    "salary_low": null,
    "salary_high": null,
    "successful?": false,
    "title": "Regional Creative Specialist",
    "work_from_home": false,
    "created_at": "2015-02-09T18:34:30.270Z",
    "updated_at": "2015-02-12T19:01:56.042Z",
    "type": "Contract",
    "tags": [
        "Arduino",
        "Oberon"
    ]
}
```

User
---
Returns information of the current user.

URL: `http://jobbox.io/api/v1/user`

Example response:
```JSON
{
    "id": 18,
    "email": "joe@example.com",
    "avatar_url": "https://example.jpg",
    "first_name": "Joe",
    "last_name": "Guy",
    "birth_year": 1980,
    "phone_number": "351 92 000 0000",
    "country_code": "PT",
    "location": "Lisbon",
    "headline": "Code Monkey",
    "bio": "I've lived somewhere and now I'm looking for something.",
    "salary_expectation": 2000,
    "currency_code": "EUR",
    "languages": [
        "English",
        "Japanese"
    ],
    "created_at": "2015-02-18T18:22:29.640Z",
    "updated_at": "2015-02-18T18:35:29.736Z",
    "skills": [
        "CSS",
        "Git",
        "Javascript"
    ],
    "focus_skills": [
        "Assembly",
        "COBOL"
    ],
    "relocation_countries": [
        "United Kingdom",
        "Ireland"
    ],
    "availability": "Looking for freelancing jobs.",
    "websites": [
        {
            "category": "linkedin",
            "url": "https://www.linkedin.com/example"
        },
        {
            "category": "github",
            "url": "https://github.com/example"
        },
        {
            "category": "bitbucket",
            "url": "https://bitbucket.org/example"
        }
    ]
}
```


Applications
------------

### List of applications
Returns the list of applications made by the current user.

URL: `http://jobbox.io/api/v1/user/applications`

Example response:
```JSON
[
    {
        "id": 3,
        "text": "I'm awesome",
        "created_at": "2015-02-18T18:53:36.790Z",
        "updated_at": "2015-02-18T18:53:36.790Z",
        "offer_id": 23,
        "referral_requests_ids": [
            3
        ]
    },
    {
        "id": 4,
        "text": "I'm good.",
        "created_at": "2015-02-18T18:53:58.319Z",
        "updated_at": "2015-02-18T18:53:58.319Z",
        "offer_id": 17,
        "referral_requests_ids": [
            4
        ]
    }
]
```

### Application
Returns the application with the given id. The application must belong to the current user.

URL: `http://jobbox.io/api/v1/user/applications/[id]`

Example response:
```JSON
{
    "id": 3,
    "text": "I'm awesome",
    "created_at": "2015-02-18T18:53:36.790Z",
    "updated_at": "2015-02-18T18:53:36.790Z",
    "offer_id": 23,
    "referral_requests_ids": [
        3
    ]
}
```


Referrals
---------

### List of referrals received
Returns the list of referrals received by the current user.

URL: `http://jobbox.io/api/v1/user/referrals_received`

Example response:
```JSON
[
    {
        "id": 2,
        "referred_name": "Joe Guy",
        "referred_email": "joe@example.com",
        "text": "Joe is an awesome guy!",
        "related": "Yes, we've done business before.",
        "created_at": "2015-02-18T18:57:24.342Z",
        "updated_at": "2015-02-18T18:57:24.563Z"
    },
    {
        "id": 3,
        "referred_name": "Joe Guy",
        "referred_email": "joe@example.com",
        "text": "I think he's good!",
        "related": "No, I just know someone great for this position.",
        "created_at": "2015-02-18T18:58:46.340Z",
        "updated_at": "2015-02-18T18:58:46.436Z"
    }
]
```


### List of referrals sent
Returns the list of referrals sent by the current user.

URL: `http://jobbox.io/api/v1/user/referrals_sent`

Example response:
```JSON
[
    {
        "id": 4,
        "referred_name": "Eva Luator",
        "referred_email": "evaluator@example.com",
        "text": "Foo is the greatest!",
        "related": "Yes, I'm an employee.",
        "created_at": "2015-02-18T19:01:05.385Z",
        "updated_at": "2015-02-18T19:01:05.385Z"
    },
    {
        "id": 5,
        "referred_name": "Michael Hack",
        "referred_email": "michael@example.com",
        "text": "Michael Hack can code with his eyes closed!",
        "related": "No, I just know someone great for this position.",
        "created_at": "2015-02-18T19:01:52.567Z",
        "updated_at": "2015-02-18T19:01:52.567Z"
    }
]
```


### Referral
Returns the referral with the given id. The referral must have been received or sent by the current user.

URL: `http://jobbox.io/api/v1/user/referrals/[id]`

Example response:
```JSON
{
    "id": 4,
    "referred_name": "Eva Luator",
    "referred_email": "evaluator@example.com",
    "text": "Foo is the greatest!",
    "related": "Yes, I'm an employee.",
    "created_at": "2015-02-18T19:01:05.385Z",
    "updated_at": "2015-02-18T19:01:05.385Z"
}
```


Referral Requests
-----------------

### List of referral requests received
Returns the list of referral requests received by the current user.

URL: `http://jobbox.io/api/v1/user/referral_requests_received`

Example response:
```JSON
[
    {
        "id": 5,
        "created_at": "2015-02-18T19:03:51.401Z",
        "updated_at": "2015-02-18T19:03:51.401Z",
        "offer_id": 22,
        "sender": "Eva Luator",
        "receiver": "joe@example.com"
    },
    {
        "id": 6,
        "created_at": "2015-02-18T19:04:35.058Z",
        "updated_at": "2015-02-18T19:04:35.058Z",
        "offer_id": 31,
        "sender": "Michael Hack",
        "receiver": "joe@example.com"
    }
]
```


### List of referral requests sent
Returns the list of referral requests sent by the current user.

URL: `http://jobbox.io/api/v1/user/referral_requests_sent`

Example response:
```JSON
[
    {
        "id": 3,
        "created_at": "2015-02-18T18:53:36.825Z",
        "updated_at": "2015-02-18T18:57:24.631Z",
        "offer_id": 23,
        "sender": "Joe Guy",
        "receiver": "evaluator@example.com"
    },
    {
        "id": 4,
        "created_at": "2015-02-18T18:53:58.325Z",
        "updated_at": "2015-02-18T18:58:46.485Z",
        "offer_id": 17,
        "sender": "Joe Guy",
        "receiver": "michael@example.com"
    }
]
```


### Referral request
Returns the referral request with the given id. The referral request must have been received or sent by the current user.

URL: `http://jobbox.io/api/v1/user/referral_requests/[id]`

Example response:
```JSON
{
    "id": 3,
    "created_at": "2015-02-18T18:53:36.825Z",
    "updated_at": "2015-02-18T18:57:24.631Z",
    "offer_id": 23,
    "sender": "Joe Guy",
    "receiver": "evaluator@example.com"
}
```
