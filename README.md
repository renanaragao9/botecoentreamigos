# 🍻 Boteco Entre Amigos

Site institucional completo para um bar/restaurante, construído com **Laravel 13**, **Filament 4**, **Livewire 3** e **Tailwind CSS 4**. O projeto une uma landing page totalmente dinâmica com um painel administrativo moderno, permitindo que o dono do estabelecimento gerencie todo o conteúdo do site sem tocar em código.

---

## ✨ Funcionalidades

### 🖥️ Site público (landing page)

- Página única com seções completas: **hero**, **sobre**, **por que nos escolher**, **cardápio**, **pratos especiais**, **eventos**, **depoimentos**, **galeria de fotos**, **chefs** e **contato**
- Cardápio organizado por categorias (bebidas, petiscos, pratos...) com itens, preços, descrição e foto
- **Formulário de reserva de mesas / agendamento de eventos** em Livewire com:
    - Validação em tempo real e mensagens em português
    - Envio por e-mail via Mailable
    - Integração com **WhatsApp** (monta mensagem pronta com os dados do agendamento)
- Animações de scroll (AOS), carrosséis (Swiper), lightbox (GLightbox) e filtros de galeria (Isotope)

### ⚙️ Painel administrativo (Filament)

- Acesso em `/admin` com login protegido
- 11 resources para gerenciar todo o conteúdo do site: categorias e itens do cardápio, especiais, eventos, features, seção "sobre", itens "por que nos escolher", depoimentos, galeria, chefs e informações de contato
- **Ordenação automática**: novos registros recebem a próxima posição de exibição sem intervenção manual (trait `SetsNextOrder`)
- Formulários e tabelas organizados em arquivos separados (arquitetura Filament modular)

### 🎲 Dados de demonstração

- Seeders completos com conteúdo realista em português (cardápio, eventos, depoimentos, chefs, galeria)
- Usuário admin criado automaticamente

---

## 🛠️ Stack tecnológica

| Camada         | Tecnologia                                         |
| -------------- | -------------------------------------------------- |
| Backend        | PHP 8.3, Laravel 13                                |
| Painel admin   | Filament 4                                         |
| Reatividade    | Livewire 3                                         |
| Frontend       | Tailwind CSS 4, Vite 8, Blade                      |
| Animações/UI   | AOS, Swiper, GLightbox, Isotope, Bootstrap Icons   |
| Banco de dados | SQLite (padrão) — configurável para MySQL/Postgres |
| Testes         | PHPUnit 12                                         |

---

## 🚀 Instalação

```bash
# 1. Clone o repositório
git clone https://github.com/seu-usuario/botecoentreamigos.git
cd botecoentreamigos

# 2. Instale as dependências e configure o projeto
composer setup
```

O script `setup` executa automaticamente: instalação das dependências PHP, criação do `.env`, geração da `APP_KEY`, migração do banco e build dos assets.

```bash
# 3. Popule o banco com os dados de demonstração
php artisan db:seed

# 4. Inicie o servidor
php artisan serve
```

### Acessos

| Recurso      | URL                           | Credenciais                       |
| ------------ | ----------------------------- | --------------------------------- |
| Site         | `http://localhost:8000`       | —                                 |
| Painel admin | `http://localhost:8000/admin` | `admin@seuracha.com` / `12345678` |

> ⚠️ **Importante**: altere a senha do admin em produção e configure as variáveis `MAIL_*` no `.env` para o envio real de e-mails.

---

## 🗂️ Estrutura do projeto

```
app/
├── Filament/
│   ├── Concerns/SetsNextOrder.php        # Ordenação automática de registros
│   └── Resources/                        # 11 resources do painel admin
│       └── MenuItems/                    # Ex.: Resource + Schemas + Pages + Tables
├── Http/Controllers/HomeController.php   # Carrega os dados da landing page
├── Livewire/BookTableForm.php            # Formulário de reserva (validação + e-mail + WhatsApp)
├── Mail/BookTableMail.php                # E-mail de confirmação de reserva
└── Models/                               # 13 models (menu, eventos, galeria, chefs...)

database/
├── migrations/                           # 15 migrations
└── seeders/                              # 10 seeders com dados de demonstração

resources/views/
├── home.blade.php                        # Landing page (438 linhas, seções dinâmicas)
├── components/layout.blade.php           # Layout base
└── livewire/book-table-form.blade.php    # View do formulário de reserva
```

---

## 📝 Como funciona

1. **HomeController** consulta os models e injeta os dados na view `home.blade.php`
2. Cada seção da página é alimentada por uma tabela do banco — nada é hardcoded
3. O dono do estabelecimento edita qualquer conteúdo pelo painel Filament em `/admin`
4. Reservas enviadas pelo site chegam por e-mail e/ou WhatsApp
5. Itens do cardápio podem ser ativados/desativados sem serem excluídos (campo `active`)

---

## ✅ Testes

```bash
composer test
```

## 🔧 Formatação de código

```bash
./vendor/bin/pint
```

---

## 📄 Licença

Este projeto está sob a licença [MIT](https://opensource.org/licenses/MIT).

---

Desenvolvido por [Renan Aragao]
