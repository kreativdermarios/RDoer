class WelcomeController < ApplicationController

	def index
		####3
	end

  def create

  	t = Cliente.create(nome: "mario", categoria: "menino")

  end

end
