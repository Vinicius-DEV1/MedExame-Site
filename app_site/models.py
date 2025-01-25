from django.db import models

# Create your models here.

class Pessoa(models.Model):
    nome = models.CharField(max_length=200)
    especialidade = models.CharField(max_length=200)
    clinica_nome = models.CharField(max_length=200)  # Nome da clínica
    endereco = models.CharField(max_length=300)  # Endereço completo
    valor = models.DecimalField(max_digits=10, decimal_places=2)  # Valor de consulta
    agenda = models.JSONField(default=list)  # Agenda dinâmica em formato JSON
    date_added = models.DateTimeField(auto_now_add=True)

    def __str__(self):
        """devolve uma representação em string do modelo"""
        return self.nome
    