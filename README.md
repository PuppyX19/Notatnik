# Opis  
Jest to applikacja która pozwala użytkowniku tworzenie notatek.  
Jest możliwe rejestracja, logowanie.

# Opis techniczny  
## Frontpage  
![Frontpage](/readme_img/frontpage.png)
Przy naciśnięciu na przycisk **LOGIN** użytkownik będzie przekierowany na stronę "login"  
Przy naciśnięciu na przycisk **SIGN UP** użytkownik będzie przekierowany na stronę "rejestracja"   
Przy naciśnięciu na przycisk **SIGN UP NOW** użytkownik będzie przekierowany na stronę "rejestracja"   
## Rejestracja
![Rejestracja](/readme_img/rejestracja.png)
Pole **email**, pole dla podania emaila użytkownika:  

    > Przy podaniu emaila w niepoprawnym formacie będzię wywołany error: "Wrong email format"  
    > Jeżeli email nie będzie podany będzie wywołany error: "Please fill all of the inputs" 
    > Przy podaniu juz zarejestrowanego emaila będzię wywołany error: "User already exists"  
  
Pole **login**, pole dla podania logina użytkownika:  
    
    > Przy podaniu juz zarejestrowanego loginu będzię wywołany error: "User already exists"  
    > Jeżeli login nie będzie podany będzie wywołany error: "Please fill all of the inputs"  

Pole **password**, pole dla podania hasła użytkownika:  

    > Jeżeli hasło nie będzie podane będzie wywołany error: "Please fill all of the inputs"  

Pole **repeat-password**, pole dla ponownego podania hasła użytkownika:  

    > Jeżeli hasło nie będzie podane będzie wywołany error: "Please fill all of the inputs"  
    > Jeżeli hasło będzie rózne od tego co użytkownik wpisał w polu password to będzie wywołany error: "Please provide proper password"  

 Jeżeli nie będzie wywalony żaden bląd to przy naciśnięciu na przycisk **REGISTER** użytkownik będzie przekierowany na strone "login" a informacja będzie zapisana w DB.  

## Login
![Login](/readme_img/login.png)

Pole **login**, pole dla podania logina użytkownika:  
    
    > Jeżeli login nie będzie podany to będzie wywołany error: "Please fill all of the inputs" 
    > Jeżeli podany login nie jest zarejestrowany to będzie wywołany error: "User with this login does not exist!"

Pole **password**, pole dla podania hasła użytkownika:

    > Jeżeli hasło nie będzie podane to będzie wywołany error: "Please fill all of the inputs"    
    > Jeżeli hasło będzie rózne od tego co użytkownik wpisał przy rejestracji to będzie wywołany error: "Wrong password!"  

 Jeżeli nie będzie wywalony żaden blęd to przy naciśnięciu na przycisk **LOGIN** użytkownik będzie przekierowany na strone "welcomePage".   
  
## Template for welcome page and others 
![Page](/readme_img/page.png)  
Została zainicjalizowana sesja użytkownika   
Przy naciśnięciu przycisk **Notes** lub na logo nad przyciskiem użytkownik będzie przekierowany na stronę "Notes".    
Przy naciśnięciu przycisk **Logout** lub na logo nad przyciskiem użytkownik będzie przekierowany na stronę "Logout".    


## Notes    
![Notes](/readme_img/notes.png)   
Dodatkowy przycisk **Add note** po lewej stronie przy naciśnięciu na który użytkownik będzie przekierowany na stronę "Add note".     
Pobierana jest informacja z bazy danych i wypisywana w postaci notatek dla użytkownika.    
   
## Add note    
![Add note](/readme_img/add_note.png)  
**title** input:

    > Maximum 40 znaków  
    > Przy przekroczeniu limitów znaków będzie wywołany error: "Cant create new note"  
  
**text** input:  

    > Maximum 300 znaków  
    > Przy przekroczeniu limitów znaków będzie wywołany error: "Cant create new note"  
 
 Jeżeli nie będzie wywalony żaden bląd to przy naciśnięciu na przycisk **ADD** będzię stworzona nowa notatka w bazie danych.  
  
## Logout  
![Logout](/readme_img/logout.png)  
Przy nacisnięciu na przycisk **LOGOUT** użytkownik będzie przekierowany na stronę "login", a sesja użytkownika będzie zniszczona.  
  
## Admin  
![Admin](/readme_img/admin.png)  
Jeżeli użytkownik ma role "admin" to przy użyciu "/admin" będzie przekierowany na strone "admin". 

**Provide a login** input:

    > Maximum 100 znaków  
    > Przy przekroczeniu limitów znaków będzie wywołany error: "Please provide a valid login"  
    > Jeżeli login nie będzie podany to będzie wywołany error: "Please provide a login" 
    > Jeżeli podany login nie jest zarejestrowany to będzie wywołany error: "This user does not exist!"

Jeżeli nie będzie wywalony żaden bląd to przy naciśnięciu na przycisk **DELETE USER** użytkownik o podanym loginie będzie usunięty z bazy danych.  
