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

  	t = Acesso.create(id_acesso: params[:nome], url: params[:categoria])

  end

end
