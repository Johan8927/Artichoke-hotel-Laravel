# Ajout de la sécurité dans l'authentification

## Incription de l'utilisateur

Voici quelques piste d'algos à implémenter pour vérifier si les champs sont valides : 

```php
    public function checkFormData(array $data){
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:20', 'regex:/^[a-zA-Z0-9-_]+$/', 'regex:/^(?!.*script).*$/'],
            'email' => ['required', 'string', 'email', 'max:50', 'unique:users', 'regex:/^(?!.*script).*$/' ],
            'password' => ['required', 'string', 'min:8', 'confirmed', 'regex:/[a-z]/', 'regex:/[A-Z]/', 'regex:/[0-9]/', 'regex:/[@$!%*#?&]/', 'regex:/^(?!.*[<>{}])(?!.*script).*$/', ]);
    }

```
