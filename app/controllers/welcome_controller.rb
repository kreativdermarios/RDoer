class WelcomeController < ApplicationController

	
	def index
		####3
	end

  def create

  	#params.require(:cliente).permit(:nome, :categoria)

  	# a = Cliente.new(params)
  	# a.nome = pa.nome
  	# a.categoria = params.categoria
  	# @cliente.save

  	t = Cliente.create(nome: params[:nome], categoria: params[:categoria])

  end

end
