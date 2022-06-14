Estruturando uma API Restful utilizando Laravel

Endpoints contidos na Api abaixo:
- Listar todas as empresas GET /api/companies 
- Cadastrar uma empresa POST /api/companies 
- Buscar uma empresa específica GET /api/companies/{id} 
- Listar todos os clientes de uma empresa específica GET /api/companies/{id}/clients 
- Cadastrar um cliente em uma empresa específica POST /api/companies/{id}/clients 
- Buscar um cliente específico de uma empresa GET /api/companies/{id}/clients/{client_id} 
- Lançar pontos para um cliente em uma empresa POST /api/companies/{id}/clients/{client_id}/points 

Cada endpoint deverá ser autenticado, para isso, deve ser enviado no header da requisição o token abaixo: h19xKUIgzxooq2RV5DIuG1SzFR2NdEQt 
Caso não seja enviado, deverá retornar um json, informando que não possui permissão. 
Ao efetuar o cadastro de um cliente, deverá ser enviado um email de bem vindo a ele.

Não se esqueça tmb de criar uma conta no mailtrap para funcionar as boas vindas ao novo cliente, ao fazer o cadastro, escolha a tecnologia que deseja e copie essas 6 linhas e jogue no seu arquivo .env

![b](https://user-images.githubusercontent.com/82241726/173596104-fd2cd880-1e66-4c4d-819e-17ccb32510ec.png)
![a](https://user-images.githubusercontent.com/82241726/173596153-599470a0-e7fd-45f5-a0e7-a2fe2dea9470.png)
