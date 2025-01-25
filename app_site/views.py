from django.shortcuts import render

# Create your views here.
def index(request):
    """Página principal"""
    return render(request, 'app_site/index.html')



"""VIEWS DE CADASTRO"""
def cadastro(request):
    """Página principal"""
    return render(request, 'app_site/cadastro/cadastro.html')



"""VIEWS DE LOGIN"""
def redirecionar_login(request):
    """Página principal"""
    return render(request, 'app_site/login/redirecionar-login.html')

def login_cliente(request):
    """Página principal"""
    return render(request, 'app_site/login/login-cliente.html')

def login_clinica(request):
    """Página principal"""
    return render(request, 'app_site/login/login-clinica.html')

