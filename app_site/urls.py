from django.urls import path
from . import views
urlpatterns = [
    path('', views.index, name='index'),
    path('redirecionar_login', views.redirecionar_login, name='redirecionar_login'),
    path('login_cliente', views.login_cliente, name='login_cliente'),
    path('login_clinica', views.login_clinica, name='login_clinica'),
    path('cadastro', views.cadastro, name='cadastro'),

]