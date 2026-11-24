# Portfolio Project Data — PHP Learning Modules

- **Category:** `code-learning` (`Code Learning`)
- **Accent Color:** `orange`
- **Target Assets Folder:** `public/images/projects/php_learning_modules/`
- **Required Local Images:** `banner.webp` ONLY

## TypeScript Data (`ProjectCaseStudy`)

```typescript
{
  "id": "php-learning-modules",
  "code": "PRO-52 // CL-08",
  "title": "PHP Learning Modules",
  "category": "code-learning",
  "categoryLabel": "Code Learning",
  "year": "2025",
  "status": "Completed",
  "accentColor": "orange",
  "repoUrl": "https://github.com/weztcy/PHP-Learning-Modules",
  "license": "MIT License",
  "banner": "/images/projects/php_learning_modules/banner.webp",
  "summary": "Structured 18-module PHP curriculum with 300 isolated CLI lessons and 6 capstone projects covering fundamentals to backend APIs.",
  "codeLearningDescription": "PHP Learning Modules is a progressive 18-module curriculum featuring 300 standalone CLI scripts, per-module guides, and execution captures. It takes learners from PHP syntax, types, and OOP to PDO databases, web security, REST APIs, testing patterns, and six capstone apps.",
  "architectureSummary": "Progressive 18-module directory layout pairing standalone PHP CLI scripts with Indonesian Markdown guides and captured PNG outputs.",
  "techStack": [
    "PHP",
    "SQLite",
    "PDO",
    "HTML",
    "Regular Expressions",
    "SPL",
    "JSON",
    "CSV",
    "Markdown"
  ],
  "telemetryMatrix": {
    "projectType": "Module-Based Programming Curriculum",
    "targetPlatform": "PHP CLI and SQLite Runtime",
    "primaryDomain": "Core PHP and Backend Engineering",
    "architecturePipeline": "18 Modules and 300 Isolated Scripts",
    "testingAndAudit": "Verified",
    "projectStatus": "Completed",
    "projectYear": "2025"
  },
  "codeLearningProjectInfo": {
    "learningCategory": "Core PHP & Backend Engineering Curriculum",
    "difficultyLevel": "Beginner to Advanced",
    "programmingLanguages": "PHP, SQL & HTML"
  },
  "codeLearningObjectives": [
    {
      "title": "Core PHP Syntax & Strict Typing Mastery",
      "description": "Write structured CLI programs using proper PHP tags, scalar and compound data types, strict_types declarations, operators, branching, and iteration algorithms.",
      "competencyCode": "COMP_01"
    },
    {
      "title": "Data Structures, Text Processing & Modular Functions",
      "description": "Transform associative and multidimensional arrays, process multibyte strings and regular expressions, and design typed, variadic, recursive, and closure-based functions.",
      "competencyCode": "COMP_02"
    },
    {
      "title": "Object-Oriented Design & Modern PHP Features",
      "description": "Architect reusable classes using inheritance, interfaces, traits, dependency injection, enums, attributes, reflection, generators, Fibers, and PHP 8.4 property patterns.",
      "competencyCode": "COMP_03"
    },
    {
      "title": "Error Handling, File I/O & Relational Persistence",
      "description": "Implement resilient exception hierarchies, input validation, CSV/JSON/stream file operations, and SQLite database CRUD transactions using PDO prepared statements.",
      "competencyCode": "COMP_04"
    },
    {
      "title": "Web Security, REST APIs & Architectural Patterns",
      "description": "Apply PSR-4 autoloading concepts, MVC, Service/Repository layers, CSRF/XSS/SQLi defenses, Bearer token APIs, PHPUnit testing patterns, and end-to-end capstone systems.",
      "competencyCode": "COMP_05"
    }
  ],
  "codeLearningPrerequisites": [
    {
      "category": "Runtime & Tooling Setup",
      "items": [
        "PHP CLI interpreter with pdo_sqlite and mbstring extensions",
        "Git client and terminal shell",
        "Code editor such as VS Code or PhpStorm"
      ],
      "description": "All 300 scripts execute directly via the PHP CLI without requiring Composer package downloads or an external database server."
    },
    {
      "category": "Foundational Knowledge",
      "items": [
        "Basic familiarity with running commands in a terminal",
        "Understanding of basic file and directory navigation"
      ],
      "description": "No prior PHP experience is required; Module 01 begins with basic program structure and CLI execution."
    }
  ],
  "codeLearningCurriculumStructure": {
    "summary": "The curriculum advances across four structured learning phases from foundational CLI syntax and control flow through functional programming, object-oriented design, modern standard library utilities, file and PDO database persistence, web HTTP handling, security defenses, and six standalone capstone systems.",
    "totalEstimatedHours": "150 Hours",
    "phases": [
      {
        "phaseNumber": "01",
        "phaseTitle": "Foundations & Core Language Mechanics",
        "difficulty": "Beginner",
        "moduleRange": "Modules 01 - 06",
        "topics": [
          "PHP Syntax & CLI Execution",
          "Data Types & Strict Typing",
          "Operators & Match Expressions",
          "Control Flow & Loops",
          "Array Manipulation & Destructuring"
        ]
      },
      {
        "phaseNumber": "02",
        "phaseTitle": "Functions, OOP & Modern Standard Library",
        "difficulty": "Intermediate",
        "moduleRange": "Modules 07 - 11",
        "topics": [
          "Multibyte Strings & Regex",
          "Typed Functions & Closures",
          "Encapsulation, Constructors & Readonly",
          "Interfaces, Traits, Enums & Reflection",
          "Generators, Fibers & Modern PHP APIs"
        ]
      },
      {
        "phaseNumber": "03",
        "phaseTitle": "Reliability, File Persistence & HTTP Web",
        "difficulty": "Intermediate",
        "moduleRange": "Modules 12 - 14",
        "topics": [
          "Exceptions, Assertions & Error Logs",
          "TXT, CSV, JSON & Stream I/O",
          "Superglobals, Forms, Sessions & Routing"
        ]
      },
      {
        "phaseNumber": "04",
        "phaseTitle": "Databases, Architecture, Security & Capstones",
        "difficulty": "Advanced",
        "moduleRange": "Modules 15 - 18",
        "topics": [
          "PDO Prepared Statements & Transactions",
          "PSR-4, MVC, Service & Repository Layers",
          "OWASP Defenses, REST APIs & PHPUnit Patterns",
          "Laravel Concepts & Six Practical Applications"
        ]
      }
    ]
  },
  "codeLearningModules": [
    {
      "id": "mod-01",
      "moduleNumber": "01",
      "title": "Introduction to PHP and Program Structure",
      "description": "Covers basic PHP syntax, opening and closing tags, echo and print statements, commenting styles, indentation conventions, and CLI script execution.",
      "submoduleCount": 10,
      "difficulty": "Beginner",
      "keyTopics": ["PHP Tags", "Echo & Print", "Comments & Semicolons", "PHP CLI & phpinfo"],
      "sourceFilesCount": 10,
      "estimatedHours": "5 Hours"
    },
    {
      "id": "mod-02",
      "moduleNumber": "02",
      "title": "Variables and Data Types",
      "description": "Explores variable declaration and naming rules, scalar types, null, arrays, objects, runtime type inspection, casting, juggling, and strict typing.",
      "submoduleCount": 14,
      "difficulty": "Beginner",
      "keyTopics": ["Scalar Types", "Arrays & Objects", "Type Casting & Juggling", "Strict Types"],
      "sourceFilesCount": 14,
      "estimatedHours": "7 Hours"
    },
    {
      "id": "mod-03",
      "moduleNumber": "03",
      "title": "Operators and Expressions",
      "description": "Demonstrates arithmetic, assignment, loose and strict comparison, logical, bitwise, ternary, null coalescing, nullsafe operators, and precedence.",
      "submoduleCount": 14,
      "difficulty": "Beginner",
      "keyTopics": ["Strict Comparison", "Null Coalescing & Nullsafe", "Bitwise & Logical", "Operator Precedence"],
      "sourceFilesCount": 14,
      "estimatedHours": "7 Hours"
    },
    {
      "id": "mod-04",
      "moduleNumber": "04",
      "title": "Branching and Decision Making",
      "description": "Implements conditional control flow with if, elseif, switch, match expressions, truthy/falsy evaluation, and practical decision-making algorithms.",
      "submoduleCount": 12,
      "difficulty": "Beginner",
      "keyTopics": ["If-Else & Switch", "Match Expression", "Truthy & Falsy", "Grade & Discount Logic"],
      "sourceFilesCount": 12,
      "estimatedHours": "6 Hours"
    },
    {
      "id": "mod-05",
      "moduleNumber": "05",
      "title": "Loops and Iteration",
      "description": "Covers for, while, do-while, foreach, nested loops, break/continue control, alternative template syntax, and classic iterative math exercises.",
      "submoduleCount": 14,
      "difficulty": "Beginner",
      "keyTopics": ["For, While & Foreach", "Nested Loops", "Break & Continue", "Factorial & Number Patterns"],
      "sourceFilesCount": 14,
      "estimatedHours": "7 Hours"
    },
    {
      "id": "mod-06",
      "moduleNumber": "06",
      "title": "Arrays and Data Manipulation",
      "description": "Teaches indexed, associative, and multidimensional arrays alongside push/pop, merge/combine, filter, map, reduce, multisort, and destructuring.",
      "submoduleCount": 20,
      "difficulty": "Beginner",
      "keyTopics": ["Multidimensional Arrays", "Map, Filter & Reduce", "Multisort & Slice", "Array Destructuring"],
      "sourceFilesCount": 20,
      "estimatedHours": "10 Hours"
    },
    {
      "id": "mod-07",
      "moduleNumber": "07",
      "title": "Strings and Text Manipulation",
      "description": "Covers concatenation, interpolation, substring extraction, formatting, heredoc/nowdoc, multibyte mbstring functions, regex matching, and slug generation.",
      "submoduleCount": 20,
      "difficulty": "Intermediate",
      "keyTopics": ["Heredoc & Nowdoc", "Multibyte Strings", "Regular Expressions", "Slug Generator"],
      "sourceFilesCount": 20,
      "estimatedHours": "10 Hours"
    },
    {
      "id": "mod-08",
      "moduleNumber": "08",
      "title": "Functions",
      "description": "Explores function declarations, named arguments, variadics, union/intersection/nullable/never types, variable scope, arrow functions, closures, and recursion.",
      "submoduleCount": 20,
      "difficulty": "Intermediate",
      "keyTopics": ["Named & Variadic Args", "Union & Intersection Types", "Closures & Arrow Functions", "First-Class Callables"],
      "sourceFilesCount": 20,
      "estimatedHours": "10 Hours"
    },
    {
      "id": "mod-09",
      "moduleNumber": "09",
      "title": "Basic Object-Oriented Programming",
      "description": "Introduces classes, objects, constructors, visibility modifiers, encapsulation, static members, cloning, constructor promotion, readonly properties, and magic methods.",
      "submoduleCount": 20,
      "difficulty": "Intermediate",
      "keyTopics": ["Encapsulation & Visibility", "Static Members & Constants", "Constructor Promotion", "Readonly & Magic Methods"],
      "sourceFilesCount": 20,
      "estimatedHours": "10 Hours"
    },
    {
      "id": "mod-10",
      "moduleNumber": "10",
      "title": "Advanced Object-Oriented Programming",
      "description": "Covers inheritance, abstract classes, interfaces, traits with conflict resolution, late static binding, covariance, composition, DI, enums, attributes, and reflection.",
      "submoduleCount": 20,
      "difficulty": "Intermediate",
      "keyTopics": ["Interfaces & Traits", "Late Static Binding", "Dependency Injection", "Enums, Attributes & Reflection"],
      "sourceFilesCount": 20,
      "estimatedHours": "10 Hours"
    },
    {
      "id": "mod-11",
      "moduleNumber": "11",
      "title": "Advanced Features and PHP Standard Library",
      "description": "Demonstrates DateTimeImmutable, timezones, CSPRNG, JSON handling, SPL iterators, generators, weak references, Fibers, readonly classes, and PHP 8.4 property concepts.",
      "submoduleCount": 20,
      "difficulty": "Intermediate",
      "keyTopics": ["DateTimeImmutable & JSON", "Generators & Yield", "Fibers & WeakReference", "Property Hooks & Visibility"],
      "sourceFilesCount": 20,
      "estimatedHours": "10 Hours"
    },
    {
      "id": "mod-12",
      "moduleNumber": "12",
      "title": "Error Handling, Debugging, and Validation",
      "description": "Teaches error reporting levels, try-catch-finally blocks, custom exceptions, chaining, Throwable, assertions, debug_backtrace, filter_var, and error logging.",
      "submoduleCount": 14,
      "difficulty": "Intermediate",
      "keyTopics": ["Try-Catch-Finally", "Custom Exceptions & Chaining", "Debug Backtrace", "Filter Validation & Logging"],
      "sourceFilesCount": 14,
      "estimatedHours": "7 Hours"
    },
    {
      "id": "mod-13",
      "moduleNumber": "13",
      "title": "File Handling and Data Management",
      "description": "Covers file read/write/append operations, directory iteration, permissions, temporary files, CSV and JSON persistence, PHP streams, and filesystem path handling.",
      "submoduleCount": 16,
      "difficulty": "Intermediate",
      "keyTopics": ["File & Directory I/O", "CSV & JSON Persistence", "Temporary Files", "Streams & Paths"],
      "sourceFilesCount": 16,
      "estimatedHours": "8 Hours"
    },
    {
      "id": "mod-14",
      "moduleNumber": "14",
      "title": "PHP for Web and HTTP",
      "description": "Explores PHP/HTML integration, superglobals, GET/POST handling, form validation and sanitization, HTML escaping, cookies, sessions, HTTP headers, and basic routing.",
      "submoduleCount": 20,
      "difficulty": "Intermediate",
      "keyTopics": ["Superglobals & Forms", "XSS Escaping & Sanitization", "Cookies & Sessions", "HTTP Headers & Routing"],
      "sourceFilesCount": 20,
      "estimatedHours": "10 Hours"
    },
    {
      "id": "mod-15",
      "moduleNumber": "15",
      "title": "Database and SQL with PHP",
      "description": "Implements PDO connections, prepared statements, parameter binding, CRUD queries, ACID transactions, pagination, search, table joins, repository classes, and migrations.",
      "submoduleCount": 16,
      "difficulty": "Advanced",
      "keyTopics": ["PDO Prepared Statements", "ACID Transactions", "Joins & Pagination", "Repository & Migrations"],
      "sourceFilesCount": 16,
      "estimatedHours": "8 Hours"
    },
    {
      "id": "mod-16",
      "moduleNumber": "16",
      "title": "Composer, Namespaces, and Project Architecture",
      "description": "Teaches namespaces, aliasing, PSR-4 autoloading simulation, Composer dependency and script concepts, dotenv configuration, PSR standards, MVC, Service Layer, and Repository.",
      "submoduleCount": 16,
      "difficulty": "Advanced",
      "keyTopics": ["Namespaces & PSR-4", "Composer & Dotenv Concepts", "PSR Standards", "MVC, Service & Repository"],
      "sourceFilesCount": 16,
      "estimatedHours": "8 Hours"
    },
    {
      "id": "mod-17",
      "moduleNumber": "17",
      "title": "Security, Testing, API, and Backend",
      "description": "Covers password hashing, session security, CSRF/XSS/SQLi defenses, RBAC, REST API routing/CRUD/pagination/Bearer auth, and PHPUnit assertion, mocking, and data provider patterns.",
      "submoduleCount": 22,
      "difficulty": "Advanced",
      "keyTopics": ["Password Hashing & RBAC", "CSRF, XSS & SQLi Defense", "REST API Design", "PHPUnit Testing Patterns"],
      "sourceFilesCount": 22,
      "estimatedHours": "11 Hours"
    },
    {
      "id": "mod-18",
      "moduleNumber": "18",
      "title": "Framework Concepts and Practical PHP Projects",
      "description": "Introduces Laravel-style routing, controllers, models, migrations, validation, and authentication concepts alongside six standalone object-oriented capstone projects.",
      "submoduleCount": 12,
      "difficulty": "Advanced",
      "keyTopics": ["Laravel Architecture Concepts", "SQLite CRUD & REST API", "POS & Inventory Systems", "OOP Capstone Apps"],
      "sourceFilesCount": 12,
      "estimatedHours": "6 Hours"
    }
  ],
  "codeLearningPracticalProjects": [
    {
      "title": "Object-Oriented Calculator",
      "description": "Standalone calculator class implementing arithmetic and exponentiation dispatch via match expressions, division-by-zero exception handling, and an internal calculation history log.",
      "highlights": [
        "Match expression operator routing",
        "InvalidArgumentException guard for zero division",
        "Indexed execution history printer"
      ],
      "coreScope": "Arithmetic operations, error validation, and state history",
      "trackTag": "Capstone Lab 01",
      "tier": "Core",
      "difficulty": "Intermediate",
      "estimatedTime": "1 Hour",
      "architecturalConstraints": [
        "Single self-contained OOP class in 295_calculator_project.php",
        "Zero external dependencies"
      ]
    },
    {
      "title": "Student Management System",
      "description": "In-memory SQLite PDO application modeling a student registry with schema initialization, prepared INSERT statements, and GPA-ordered record retrieval.",
      "highlights": [
        "PDO SQLite in-memory database initialization",
        "Prepared statements for safe student insertion",
        "Descending GPA query reporting"
      ],
      "coreScope": "Relational student CRUD and SQL ordering",
      "trackTag": "Capstone Lab 02",
      "tier": "Core",
      "difficulty": "Intermediate",
      "estimatedTime": "1 Hour",
      "architecturalConstraints": [
        "Uses sqlite::memory: via PHP PDO",
        "Implemented in 296_student_management_project.php"
      ]
    },
    {
      "title": "Warehouse Inventory System",
      "description": "Associative inventory manager tracking product codes, stock quantities, outbound deductions, and automated restock threshold status reporting.",
      "highlights": [
        "Product registration with minimum stock thresholds",
        "Safe outbound quantity deduction",
        "Automated restock alert flagging"
      ],
      "coreScope": "Stock ledger tracking and threshold monitoring",
      "trackTag": "Capstone Lab 03",
      "tier": "Core",
      "difficulty": "Intermediate",
      "estimatedTime": "1 Hour",
      "architecturalConstraints": [
        "In-memory associative stock store",
        "Implemented in 297_inventory_management_project.php"
      ]
    },
    {
      "title": "Point-of-Sale Cashier System",
      "description": "Retail checkout system managing line-item shopping carts, subtotal calculations, total aggregation, and formatted CLI receipt rendering.",
      "highlights": [
        "Line-item cart aggregation with quantities and unit prices",
        "Aligned tabular receipt output using sprintf",
        "Indonesian Rupiah number formatting"
      ],
      "coreScope": "Transaction line items and formatted receipt generation",
      "trackTag": "Capstone Lab 04",
      "tier": "Core",
      "difficulty": "Intermediate",
      "estimatedTime": "1 Hour",
      "architecturalConstraints": [
        "Standalone CLI output formatting",
        "Implemented in 298_cashier_system_project.php"
      ]
    },
    {
      "title": "Library Management System",
      "description": "Catalog circulation manager handling book availability state transitions, borrower assignment, and overdue penalty fee computation.",
      "highlights": [
        "Book catalog availability state checks",
        "Borrower checkout state updates",
        "Configurable daily late-fee calculation"
      ],
      "coreScope": "Catalog state management and fine computation",
      "trackTag": "Capstone Lab 05",
      "tier": "Core",
      "difficulty": "Intermediate",
      "estimatedTime": "1 Hour",
      "architecturalConstraints": [
        "Self-contained catalog array state",
        "Implemented in 299_library_management_project.php"
      ]
    },
    {
      "title": "Complete REST API Service",
      "description": "Integrated backend API simulation combining Bearer-style token verification, endpoint routing, SQLite PDO product queries, and structured JSON status responses.",
      "highlights": [
        "API token authorization with 401 handling",
        "Endpoint routing with 404 fallback",
        "SQLite PDO query serialized to pretty JSON"
      ],
      "coreScope": "Authenticated endpoint dispatch and JSON data persistence",
      "trackTag": "Capstone Lab 06",
      "tier": "Advanced",
      "difficulty": "Advanced",
      "estimatedTime": "1.5 Hours",
      "architecturalConstraints": [
        "Combines token auth, routing, and sqlite::memory: PDO",
        "Implemented in 300_rest_api_project.php"
      ]
    }
  ],
  "codeLearningOutcomes": [
    {
      "pillar": "Core PHP & Functional Mastery",
      "skills": [
        {
          "title": "Type-Safe & Expressive PHP Logic",
          "description": "Apply strict typing, match expressions, nullsafe operators, array higher-order functions, and closures to write concise CLI programs."
        },
        {
          "title": "Text & Pattern Processing",
          "description": "Handle multibyte text with mbstring and build regex validators, replacers, and slug generators."
        }
      ]
    },
    {
      "pillar": "Object-Oriented Architecture & Standard Library",
      "skills": [
        {
          "title": "SOLID-Aligned OOP Composition",
          "description": "Structure applications with interfaces, traits, dependency injection, enums, attributes, and readonly classes."
        },
        {
          "title": "Memory-Efficient Execution",
          "description": "Use SPL iterators, generators with yield, DateTimeImmutable, and Fibers for clean resource handling."
        }
      ]
    },
    {
      "pillar": "Backend Persistence, Security & APIs",
      "skills": [
        {
          "title": "Safe Database & File Operations",
          "description": "Persist structured data across CSV, JSON, streams, and SQLite via PDO prepared statements and transactions."
        },
        {
          "title": "Hardened Backend Services",
          "description": "Protect applications against CSRF, XSS, and SQL injection while implementing RBAC, REST JSON APIs, and unit test assertions."
        }
      ]
    }
  ],
  "codeLearningCurriculumSpecs": {
    "curriculumTrack": "Core PHP to Backend",
    "primaryLanguage": "PHP",
    "executionRuntime": "PHP CLI and SQLite",
    "testVerification": "CLI Output Captures"
  },
  "codeLearningSupplementaryResources": [
    {
      "title": "Per-Module Lesson Guides & Output Captures",
      "description": "Each of the 18 module directories includes an Indonesian-language README guide and verified CLI output screenshots for every submodule.",
      "resources": [
        {
          "name": "Module README Guides (Modules 01 - 18)",
          "type": "Module Reference Guide",
          "format": "MD"
        },
        {
          "name": "CLI Execution Screenshots (output/*.png)",
          "type": "Execution Output Capture",
          "format": "PNG"
        }
      ]
    },
    {
      "title": "Module Data Fixtures & Runtime Logs",
      "description": "Sample files and generated persistence artifacts used across error logging, file handling, and PDO SQLite modules.",
      "resources": [
        {
          "name": "Module 13 Sample Text, CSV, JSON & Config Files",
          "type": "Exercise Data Fixture",
          "format": "CSV / JSON / TXT"
        },
        {
          "name": "Module 12 & 15 Runtime Artifacts (app_error.log, app_database.sqlite)",
          "type": "Runtime Output Artifact",
          "format": "LOG / SQLITE"
        }
      ]
    }
  ]
}
```
