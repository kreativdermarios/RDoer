class Acesso < ActiveRecord::Base
	belongs_to :cliente 
	has_many :contato
end
