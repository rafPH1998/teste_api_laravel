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
